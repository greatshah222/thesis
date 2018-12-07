import Token from './Token'
import AppStorage from './AppStorage'


class User {
    flogin(data){
        axios.post('/thesis_new/public/api/auth/try/flogin',data)
            .then(res => this.responseAfterLogin(res))
    .catch(error => console.log(error.response.data))
    }
    responseAfterLogin(res){
        const access_token = res.data.access_token
        const username = res.data.user

        if(Token.isValid(access_token)){
            AppStorage.store(username,access_token)
            window.location = '/thesis_new/public/try/forum'

        }
    }
    hasToken(){
        const storedToken = AppStorage.getToken();
        if(storedToken){
            return Token.isValid(storedToken) ? true : false
        }
        return false
    }
    floggedIn(){
        return this.hasToken()
    }
    flogout(){
        AppStorage.clear()
        window.location = '/thesis_new/public/try/forum'

    }
    name(){
        if(this.floggedIn()){
            return AppStorage.getUser()
        }
    }
    id(){
        if(this.floggedIn()){
            const payload = Token.payload(AppStorage.getToken())
            return payload.sub
        }
    }
}
export default User = new User();