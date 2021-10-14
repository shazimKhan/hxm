<template>
  <div class="leavelists">
    <h2> My Leave Lists </h2>
    <br>

    <a-table :loading="loading" :columns="columns" :data-source="data">
      <a slot="status" slot-scope="status">
        <span v-if="status == 1">
          <a-badge
            count="Approved"
            :number-style="{
              backgroundColor: '#00ffff',
              color: '#999',
              boxShadow: '1 1 1 2px #d9d9d9 inset',
            }"
          />
        </span>
        <span v-else-if="status == 2">
          <a-badge
            count="Rejected"
            :number-style="{
              backgroundColor: '#00ffff',
              color: '#999',
              boxShadow: '1 1 1 2px #d9d9d9 inset',
            }"
          />
        </span>
          <span v-else>
          <a-badge
            count="Pending"
            :number-style="{
              backgroundColor: '#00ffff',
              color: '#999',
              boxShadow: '1 1 1 2px #d9d9d9 inset',
            }"
          />
        </span>
      </a>
    </a-table>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'
const columns = [
  {
    title: 'ID',
    dataIndex: 'key',
    key: 'key'
  },
  {
    title: 'Leave Type',
    dataIndex: 'leave_type',
    key: 'leave_type '
  },
  {
    title: 'Date From',
    dataIndex: 'date_from',
    key: 'date_from'
  },
  {
    title: 'Date To',
    dataIndex: 'date_to',
    key: 'date_to'
  },
  {
    title: 'Days',
    dataIndex: 'days',
    key: 'days'
  },
  {
    title: 'Status',
    dataIndex: 'status',
    key: 'status',
    scopedSlots: { customRender: 'status' }
  }
]
export default {
  data () {
    return {
      loading: false,
      data: [],
      columns
    }
  },
  computed: mapGetters({
    token: 'auth/token'
  }),
  mounted () {
    this.getMyLeaves()
  },
  methods: {
    async getMyLeaves () {
      this.loading = true
      await this.$axios.get('/get-all-leaves', {
        headers: {
          Authorization: `Bearer ${this.token}`
        }
      })
        .then((resp) => {
          resp.data.data.forEach((leave, i) => {
            this.data.push(
              {
                key: i + 1,
                leave_type: leave.leave_type.leave_type,
                date_from: leave.date_from,
                date_to: leave.date_to,
                days: leave.days,
                reason: leave.reason,
                status: leave.status
              }
            )
          })
          this.loading = false
          console.log(resp.data)
        })
        .catch((error) => {
          console.log(error)
        })
    }
  }
}
</script>

<style>
</style>