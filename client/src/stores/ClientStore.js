import { defineStore } from 'pinia'
import { useStorage } from '@vueuse/core'



export const useClientStore=  defineStore('ClientStore',{
    state: () => ({
       userRef : useStorage('userRef', null),
       userName : useStorage('userName', null),
       userInformation : null,
        userToken : null,
        userRole : null,
        userAppointments : null,
    }),
    getters:{
        getuserRef (){
            return this.userRef
        },
        getuserName (){
            return this.userName
        },
    }
    ,
    actions:{
        setUserRefInLocalStorage(ref){
            localStorage.setItem('userRef', ref)
        },
        setUserNameInLocalStorage(nom){
            localStorage.setItem('userName', nom)
        },

        fetchClientAppointments(){
            fetch(`http://localhost:8001/api/Appointment?Customer_reference=${this.userRef}`)
                .then(response => response.json())
                .then(data => {
                    this.userAppointments = data.data
                    this.userName = this.userAppointments[0].FirstName
                    localStorage.setItem('appArr', JSON.stringify(this.userAppointments));
                    console.log(this.userAppointments)
                    localStorage.setItem('UserID',this.userAppointments[0].CustomerID);
                })
        },
        getUserRefInLocalStorage(){
            this.userRef = localStorage.getItem('userRef')
        },
        getUserNameInLocalStorage(){
            this.userName = localStorage.getItem('userName')
        },
        redirectwhenUserIsNotConnected(){
            if(this.userRef === null){
                window.location.href = '/login'
            }
        },
        setUserInformation(info){
            this.userInformation = info
        }
        ,
        setUserToken(token){
            this.userToken = token
        }
        ,
    }
})