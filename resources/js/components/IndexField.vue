<template>
  <span class="dot_on" v-if="field.value === 1" :style="trueStyles()"></span>
  <span class="dot_off" v-else-if="field.value === 0" :style="falseStyles()"></span>
</template>

<script>
export default {
  props: ['resourceName', 'field'],
  data() {
    return [];
  },
  methods: {
    trueStyles() {
      if (typeof this.field.on_color != 'undefined') {
        return {
          "background-color": this.field.on_color
        };
      } else {
        return {
          "background-color": "green",
        };
      }
    },
    falseStyles() {
      if (typeof this.field.off_color != 'undefined') {
        return {
          "background-color": this.field.off_color
        };
      } else {
        return {
          "background-color": "gray",
        };
      }
    }
  },
  mounted() {


  }
}
</script>
