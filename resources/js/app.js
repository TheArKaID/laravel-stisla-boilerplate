import './bootstrap';
import './stisla/stisla'
import './stisla/scripts';
import './stisla/custom';

import '../css/app.css';
import '../sass/app.scss'

import '../css/stisla/style.css';
import '../css/stisla/components.css';
import '../css/stisla/custom.css';

import { createApp } from 'vue'
import Header from './Components/Header.vue';
import Sidebar from './Components/Sidebar.vue';
import Footer from './Components/Footer.vue';
import BlankPage from './Pages/BlankPage.vue';

createApp({
    components: {
        MainHeader: Header,
        Sidebar,
        MainFooter: Footer,
        BlankPage,
    }
}).mount('#app')
