import './bootstrap'
import Vue from 'vue'
import ItemLike from './components/ItemLike.vue'
import ItemTagsInput from './components/ItemTagsInput.vue'

const app = new Vue({
    el: '#app',
    components: {
        ItemLike,
        ItemTagsInput,
    }
})
