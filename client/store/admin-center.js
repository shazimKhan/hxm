import axios from 'axios'
import Cookies from 'js-cookie'

// state
export const state = () => ({
    moduleList: 'admin-center',
})

// getters
export const getters = {
    getModuleList: state => state.moduleList,

}

// mutations
export const mutations = {
    SET_MODULE(state, value) {
        state.moduleList = value
    },

}

// actions
export const actions = {
    changeModule({ commit, dispatch }, param) {
        commit('SET_MODULE', param);
    },


}
