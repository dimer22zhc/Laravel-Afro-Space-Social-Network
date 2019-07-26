<template>
  <div class="page-has-left-panels page-has-right-panels">
    <navbar />
    <div class="header-spacer"></div>
    <div class="container">
      <child />
    </div>
  </div>
</template>

<script>
import Navbar from '~/components/Navbar'

export default {
  name: 'MainLayout',

  components: {
    Navbar
  }
}
</script>
