import './bootstrap'
import Vue from 'vue'
import ItemLike from './components/ItemLike.vue'
import ItemTagsInput from './components/ItemTagsInput.vue'
import FollowButton from './components/FollowButton.vue'

const app = new Vue({
    el: '#app',
    components: {
        ItemLike,
        ItemTagsInput,
        FollowButton,
    }
})
