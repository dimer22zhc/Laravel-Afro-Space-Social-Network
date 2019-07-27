<template>
  <div>
    <Grid :size_1="1" :size_0="9" :size_2="1">
      <template v-slot:middle>
        <ProfileHeader/>
        <router-view/>
      </template>
      <template v-slot:right>
        right
      </template>
      <template v-slot:left>
        left
      </template>
    </Grid>
  </div>
</template>

<script>
  export default {
    name:"UserProfile"

  }
</script>

<style lang="scss" scoped>

</style>
