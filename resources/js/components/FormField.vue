<template>
    <default-field :field="field">
        <template slot="field">
            <input :id="field.name" type="checkbox"
                   :class="this.field.color"
                   :placeholder="field.name"
                   v-model="value"
                   v-bind:true-value="1" v-bind:false-value="0"

            />

            <p v-if="hasError" class="my-2 text-danger">
                {{ firstError }}
            </p>
        </template>
    </default-field>
</template>


<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    data: {

    },

    computed: {

    },
    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
          this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
          formData.append(this.field.attribute, Number(this.value) || Number(0))
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
          this.value = value
        }
    }
}
</script>
