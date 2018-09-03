<template>
    <span class="dot_on" v-if="field.value === 1"></span>
    <span class="dot_off" v-else-if="field.value === 0"></span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
