<template>
  <div>
    <div class="row">
        <main :class="'col col-xl-'+this.size_0+' '+'order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12'">
            <slot name="middle"></slot>
        </main>
        <aside :class="'col col-xl-'+this.size_1+' '+'order-xl-1 col-lg-12 order-lg-2 col-md-6 col-sm-6 col-12'">
            <slot name="right"></slot>
        </aside>
        <aside :class="'col col-xl-'+this.size_2+'  '+'order-xl-3 col-lg-12 order-lg-3 col-md-6 col-sm-6 col-12'">
            <slot name="left"></slot>
        </aside>
    </div>
  </div>
</template>


<script>
  export default {
    props:['size_0','size_1','size_2'],
    name:"Grid"
  }
</script>

<style lang="scss" scoped>

</style>
