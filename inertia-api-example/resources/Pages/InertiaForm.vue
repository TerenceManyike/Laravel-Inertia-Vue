<template>
    <div>
      <form @submit.prevent="submitForm">
        <label>
          Organization ID:
          <input v-model="organizationId" type="text" />
        </label>
        <button type="submit">Submit</button>
      </form>
  
      <div v-if="responseData">
        <p>API Response:</p>
        <pre>{{ responseData | json }}</pre>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        organizationId: "",
        responseData: null,
      };
    },
    methods: {
      async submitForm() {
        // Use Inertia.post to submit form data to the backend
        await this.$inertia.post('/fetch-data', { id: this.organizationId }, {
          onSuccess: (response) => {
            this.responseData = response;
          },
        });
      },
    },
  };
  </script>
  