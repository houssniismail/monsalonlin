<script setup>
import BaseHeader from  "../components/BaseHeader.vue"
import Swal from 'sweetalert2'




const register = async(e)=>{
    // console.log(e.target);
    // const form = e.target;
    const myFormData = new FormData(e.target);
    const response = await fetch("http://localhost:8001/api/customer/register",{
        method: 'POST',
        headers: {
        },
        body: myFormData
    });
    const data = await response.json()
    // console.log(data);
    // console.log(response.status);
    if(response.status ===  201){
        // you need to store his referance on cookie so he can register in all website 
        // push to customer his code reference so he can login anytime 
        // router.push("/");
        console.log(data)
        Swal.fire(
            "Compte crée \n Voici votre reference unique:" + data.Customer_reference
        );
    }
    
}
</script>


<template>
    <div >
        <BaseHeader/><br><br>
        <div class="main-register">
            <form action="" @submit.prevent="register">
                <div class="register-form">
                    <h1 class=". text-4xl">
                        Join us 
                    </h1><br>
                    <div class="input max-w-lg">
                        <label for="FirstName">Prenom</label>
                        <div class="input-value">
                            <input type="text" name="FirstName" placeholder="ISMAIL" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <span class="text-red-600"></span>
                    </div>
                    <div class="input max-w-lg">
                        <label for="LastName">Nom</label>
                        <div class="input-value">
                            <input type="text" name="LastName" placeholder="HOUSSNI" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <span class="text-red-600"></span>
                    </div>
                    <div class="input max-w-lg">
                        <label for="Email">Email</label>
                        <div class="input-value">
                            <input type="Email" name="Email" placeholder="HOUSSNI@gmail.com" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <span class="text-red-600"></span>
                    </div>
                    <div class="input max-w-lg">
                        <label for="PhoneNumber">TEL</label>
                        <div class="input-value">
                            <input type="Number" name="PhoneNumber" placeholder="06XXXXXX94" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <span class="text-red-600"></span>
                    </div>
                    <div class="input max-w-lg">
                        <label for="Address">Address</label>
                        <div class="input-value">
                            <input type="text" name="Address" placeholder="Address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <span class="text-red-600"></span>
                    </div>
                    <div class="input max-w-lg">
                        <label for="City">Ville</label>
                        <div class="input-value">
                            <input type="text" name="City" placeholder="City" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <span class="text-red-600"></span>
                    </div>
                    <div class="input max-w-lg">
                        <label for="State">Region</label>
                        <div class="input-value">
                            <input type="text" name="State" placeholder="Region" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <span class="text-red-600"></span>
                    </div>
                </div>
                <button type="submit" class="bg-blue-500 rounded shadow-orange-100 px-2 py-2 text-white hover:bg-blue-600 mb-4">
                    Register
                </button>
            </form>
            <div class="cover">
                <img src="https://www.projectcounter.org/wp-content/uploads/2016/03/icon-register.png" alt="">
            </div>
        </div>
        
    </div>
</template>


<style scoped>

.main-register{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 20px;
    height: 90vh;

}

.cover{
    height: 100%;
    
}

.input{
    margin : 1rem 0;
}
.cover img{
    height: 100%;
    object-fit: cover;
}
form{
    margin: auto;
    min-width: 400px;
}

@media (max-width:700px) {
    .main-register{
        grid-template-columns: repeat(1,1fr);
    
    }
}

</style>
