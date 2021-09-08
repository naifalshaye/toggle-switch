<template>
  <default-field :field="field">
    <template slot="field">
      <input :id="field.name" type="checkbox"
             :disabled="disabled()"
             :class="custom_color(this.field.color)"
             :style.checked="getCustomStyle()"
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
import {FormField, HandlesValidationErrors} from 'laravel-nova'

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field'],

  data: function () {
    return {
      is_code: false,
    }
  },

  computed: {},
  methods: {
    disabled() {
      if (typeof this.field.extraAttributes != 'undefined') {
        if (this.field.extraAttributes.disabled || this.field.extraAttributes.readonly) {
          return true;
        }
      } else if (this.field.disabled || this.field.readonly) {
        return true;
      } else {
        return false;
      }
    },
    getCustomStyle() {
      if (this.value) {
        if (this.is_code == true) {
          return "color : " + this.field.color + "; border-color :" + this.field.color
        }
      }

      return ""
    },
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
    },

    custom_color(color) {
      if (color.indexOf("#") === 0) {
        this.is_code = true
        return 'custom-color';
      }
      this.is_code = false;
      return this.color;
    }
  },
  created: function () {
    if (!this.field.color) {
      this.field.color = '#43D559';
    }
  }
}
</script>
