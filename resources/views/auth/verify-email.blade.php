<x-layout.main>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{__('ui.Msg Email')}}
            
        </div>
    @endif

    <form action="/email/verification-notification" method="POST">
        @csrf
        <button type="submit"> {{__('ui.Reinvia la Mail')}} </button> 
    </form>
</x-layout.main>