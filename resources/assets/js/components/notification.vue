<template lang="html">
    <div class="notification alert alert-primary alert-dismissible fade show" role="alert" ref="expire">
   <slot>
  </slot>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

</template>

<script>
export default {
    // props: [
    //   "class"
    // ],
    data() {
        return {
            isVisible: true
        }
    },
    mounted() {
        setTimeout(this.close, 10000);
    },
    methods: {
        close() {
            var newVar = this.$refs.expire
            $(newVar).alert('close');
            // this.isVisible = false
        }
    }
}
</script>

<style lang="css">
.notification {
  position: fixed;
  bottom: 1rem;
  right: 3rem;
  z-index: 100;
  margin: 0;
}
</style>
