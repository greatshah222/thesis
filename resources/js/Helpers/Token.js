




class Token{

    isValid(token){
        const payload = this.payload(token);
        if(payload){
            return payload.iss == "http://localhost:8888/thesis_new/public/api/auth/flogin" || "http://localhost:8888/thesis_new/public/api/auth/fsignup" ? true : false
        }

        return false
    }

    payload(token){
        const payload = token.split('.')[1]
        return this.decode(payload)
    }

    decode(payload){
        return JSON.parse(atob(payload))
    }
}

export default Token = new Token()