<template>
    <panel-item :field="field">
        <template slot="value">
            <span class="dot_on" v-if="field.value === 1"></span>
            <span class="dot_off" v-else-if="field.value === 0"></span>
        </template>
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
