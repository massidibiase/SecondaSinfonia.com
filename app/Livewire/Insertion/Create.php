<?php

namespace App\Livewire\Insertion;
use App\Models\User;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Insertion;
use App\Jobs\WaterLogo;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\WithFileUploads; // per immagini
use Illuminate\Support\Facades\File; // per immagini
//use Illuminate\Support\Facades\Storage;



class Create extends Component

{
    use WithFileUploads;

   #[Validate('required|min:3|max:50')] 
    public $title;

    #[Validate('required|numeric')] 
    public $price;

    #[Validate('required|min:3|max:150')] 
    public $description;

    public $categories;


  
    public $category;

    public $user;

    public $category_id;

    public $insertion;
  
    public $images =[];
    
    public $image;


 
     public $temporary_images;
    
        public function rules(){
            return [
                 
                 'images'=>'required',
                 'images.*'=>'required|image|max:1024',
                 'temporary_images'=>'required',
                 'temporary_images.*'=>'required|image|max:1024',
                 'category'=>'required',
                 
             ];
        }


   

    protected $messages=[
        
        'temporary_images.required'=>'immagine richiesta',
        'temporary_images.*.image'=> 'I file devono essere immagini',
        'temporary_images.*.max'=> 'L\'immagine deve essere massimo di 1mb',
        'images.image'=> 'Il file deve essere un\'immagine',
        'images.max'=> 'L\'immagine deve essere massimo di 1mb',


    ];

  




    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image){
                $this->images[]= $image;
            }
        }
    }
    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function store(){
        $this->validate();
        
        $category = Category::find($this->category);

        
        $this->insertion = $category->insertions()->create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'user_id'=>Auth::user()->id,
            'image'=>$this->image,
         


        ]);
        if(count($this->images)){
            foreach ($this->images as $image){
                $newFileName = "insertions/{$this->insertion->id}";
                $newImage = $this->insertion->images()->create(['path'=>$image->store($newFileName,'public')]);

                RemoveFaces::withChain([
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                    new ResizeImage($newImage->path , 300 , 300),
                    new WaterLogo($newImage->id),

                ])->dispatch($newImage->id);


            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        session()->flash('success','Annuncio creato con successo');
        $this->formreset();

      

}
public function formreset(){
    $this->title='';
    $this->description='';
    $this->price='';
    $this->image='';
    $this->category='';
    $this->temporary_images='';
    $this->images= [];
    
    
}
public function mount(){
    $this->categories=Category::all();


}



    public function render()
    {
        return view('livewire.insertion.create');
    }
}
    
    
    
    
    
     
        
        
            



        

     

       
    