import './bootstrap';

import {createApp} from 'vue'
import todosC from './Components/todosComponent.vue'
import testC from './Components/testComponent.vue'
import mybutton from "./Components/mybutton.vue";

const app=createApp(todosC);

app.component('tst',testC)
app.component('mybutton',mybutton)
app.mount("#app")
