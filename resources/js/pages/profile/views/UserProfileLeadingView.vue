<template>
  <div>
   <Grid :size_1="5" :size_0="7" :size_2="0">
      <template v-slot:middle>
       middile
      </template>
      <template v-slot:right>
        <ProfileIntroInfo/>
      </template>
      <template v-slot:left>
      </template>
    </Grid>
  </div>
</template>

<script>
  export default {

  }
</script>

<style lang="scss" scoped>

</style>
