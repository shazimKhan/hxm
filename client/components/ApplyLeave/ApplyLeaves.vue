<template>
<div class="applyleaves">
<h1> Apply For Leave </h1>
<br>
  <a-form-model :model="form" :label-col="labelCol" :wrapper-col="wrapperCol">
    <a-form-model-item label="ID">
      <a-input v-model="form.name0" />
    </a-form-model-item>
    <a-form-item
      
      label="Employee Name"
    >
    <a-input
        v-decorator="[
          'username',
          { rules: [{ required: true, message: 'Please input your name' }] },
        ]"
        placeholder="Please input your name"
      />
    </a-form-item>
  
    <a-form-model-item label="Leave Type">
      <a-input v-model="form.region" placeholder="please select One" />
      
    </a-form-model-item>
    <a-form-model-item label="Date From">
      <a-date-picker
        v-model="form.date1"
        show-time
        type="date"
        placeholder="Pick a date"
        style="width: 30%;"
      />
    </a-form-model-item>
      <a-form-model-item label="Date To">
      <a-date-picker
        v-model="form.date2"
        show-time
        type="date"
        placeholder="Pick a date"
        style="width: 30%;"
      />
    </a-form-model-item>
    <a-form-model-item label="Days">
    <input id="total_days" name="number_of_days" value="" readonly="readonly"
     type="text" size="20" class="select2-single form-control"/>
    </a-form-model-item>
    <a-form-model-item label="Reason">
      <a-input v-model="form.name1" />
    </a-form-model-item>
    <a-form-model-item :wrapper-col="{ span: 14, offset: 4 }">
      <a-button type="primary" @click="onSubmit">
        Submit
      </a-button>
      <a-button style="margin-left: 10px;">
        Reset
      </a-button>
    </a-form-model-item>
    
    </a-form-model>
</div>
</template>
<script>
export default {
  data() {
    return {
      labelCol: { span: 4 },
      wrapperCol: { span: 8 },
      disabled: true,
      form: {
        name: '',
        region: undefined,
        date1: undefined, 
        desc: '',
      },
    };
  },
  methods: {
    onSubmit() {
      console.log('submit!', this.form);
    },
  },
};
</script>
