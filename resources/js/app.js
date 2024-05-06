import './bootstrap';
import 'bootstrap';
import './main.js';
import { hideSidebar } from './main.js';

document.getElementById("hideButton").addEventListener("click", hideSidebar);

import { showSidebar } from './main.js';

document.getElementById("showButton").addEventListener("click", showSidebar);

import { scrollToTop } from './main.js';

document.getElementById("scrollToTop").addEventListener("click", scrollToTop);