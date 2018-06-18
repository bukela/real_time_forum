class Token {

    isValid(token) {
        const payload = this.payload(token);
        if(payload) {
            return payload.iss == "http://real.test/api/auth/login" || "http://real.test/api/auth/signup" ? true : false
            // proverava da li je token sa naseg servera iss
            //iss dobijamo kada dekodiramo token kroz payload metod
        }
        return false // ako ne moze da dekodira token
    }

    payload(token) {
        const payload = token.split('.')[1] //splituje token po tackama i (token se satoji od header,payload,signature)uzima samo payload
        return this.decode(payload)
    }

    decode(payload) {
        // atob(payload) dekodira payload iz tokena
        if(this.isBase64(payload)){
            return JSON.parse(atob(payload))
        }
        return false
    }

    isBase64(str){
        try{
            return btoa(atob(str)).replace(/=/g,"") == str
        }
        catch(err){
            return false
        }
    }
}

export default Token = new Token()