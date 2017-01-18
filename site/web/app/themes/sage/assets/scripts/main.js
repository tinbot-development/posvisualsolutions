// import external dependencies
import 'jquery';
import 'bootstrap/dist/js/bootstrap';
import 'fancybox/lib/jquery.mousewheel.pack.js';
import 'fancybox/dist/js/jquery.fancybox.pack.js';
import 'fancybox/dist/helpers/js/jquery.fancybox-thumbs.js';

// import local dependencies
import Router from './util/router';
import common from './routes/Common';
import home from './routes/Home';
import aboutUs from './routes/About';

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
const routes = {
  // All pages
  common,
  // Home page
  home,
  // About us page, note the change from about-us to aboutUs.
  aboutUs,
};

// Load Events
document.addEventListener('DOMContentLoaded', () => new Router(routes).loadEvents());
