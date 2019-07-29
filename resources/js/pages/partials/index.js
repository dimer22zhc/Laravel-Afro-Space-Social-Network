import Vue from 'vue'
import ProfileHeader from './profile_components/_ProfileHeader.vue'
import GridLayout from './_GridLayout.vue'
import ProfileIntroInfo from './profile_components/_ProfileIntroInfo.vue'

[
  ProfileIntroInfo,
  GridLayout,
  ProfileHeader,
].forEach(Component => {
  Vue.component(Component.name, Component)
})

