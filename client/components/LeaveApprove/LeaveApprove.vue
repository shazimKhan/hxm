<template>
  <div class="leaveapproves">
    <h2> Leave Approval  </h2>
    <br>

    <a-table :loading="loading" :columns="columns" :data-source="data">
      <a-dropdown slot="status" slot-scope="status,row">
        <a-menu slot="overlay">
          <a-menu-item key="1" @click="approveRejectLeave(1,row.id)">
            Approved
          </a-menu-item>
          <a-menu-item key="2" @click="approveRejectLeave(2,row.id)">
            DisApprove
          </a-menu-item>
        </a-menu>
        <a-button v-if="status ==1" type="primary" style="margin-left: 8px">
          Approved <a-icon type="down" />
        </a-button>
        <a-button v-else-if="status == 2" type="danger" style="margin-left: 8px">
          DisApprove <a-icon type="down" />
        </a-button>
        <a-button v-else type="primary" style="margin-left: 8px">
          Pending <a-icon type="down" />
        </a-button>
      </a-dropdown>
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
    // title: '',
    // dataIndex: 'id'
    key: 'id'
  },
  {
    title: 'Employee Name',
    dataIndex: 'employee_name',
    key: 'employee_name'
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
    title: 'Reason',
    dataIndex: 'reason',
    key: 'reason'
  },
  {
    title: 'Request for Approval',
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
                id: leave.id,
                employee_name: leave.user.name,
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
    },
    async approveRejectLeave (status, id) {
      await this.$axios.post('/approved-reject-leave', {
        leave_id: id,
        status
      }, {
        headers: {
          Authorization: `Bearer ${this.token}`
        }
      })
        .then((resp) => {
          this.$notification.success({
            message: resp.data.message,
            description:
           resp.data.message
          })
          this.data = []
          this.getMyLeaves()
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
