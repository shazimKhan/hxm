export default ({ store, redirect, route }) => {
  if (route.path === '/leave-approval' && store.state.auth.user.role.name === 'Employee') {
    return redirect('/leavelist')
  }
}
