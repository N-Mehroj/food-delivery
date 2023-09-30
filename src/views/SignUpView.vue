<template >
    <div class="grid gap-56  lg:grid-cols-1 xl:grid-cols-1 2xl:grid-cols-2 h-screen">
        <div class="overflow-hidden bg-[#687AFD]">
            <div class="pl-52 pt-10">
                <img :src="signUp" alt="">
                <div class="signText mt-32 pr-36">
                    <h1 class="text-white leading-tight font-medium text-5xl">A few steps to create your restaurant or
                        personal account</h1>
                    <p class="mt-4 text-white  font-thin leading-snug">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Assumenda tenetur voluptatem cum, ab est</p>
                </div>
            </div>
            <img :src="signImg" alt="" class="rounded-xl " width="850"
                style="transform: rotate(-18deg);margin: 200px 0 0 -170px;">
        </div>
        <div class="mt-12 ">
            <div class="cl">
                <div class="step inline-blocks flex">
                    <div class="rounded-full w-4 h-4 flex justify-center bg-[#687AFD]"
                        :class="[{ 'bg-[#687AFD]': step == 1 }, { 'bg-gr': step > 1 }]">
                        <v-icon name="bi-check" class="mb-1 text-white "
                            :class="[{ 'opacity-0': step == 1 }, { 'opacity-1': step > 1 }]"></v-icon>
                    </div>
                    <div :class="[{ 'bg-[#8CDFB7]': step > 1 }, { 'bg-[#E3E3E8]': step == 1 }]"
                        class="box transition-all rounded-xl w-32 h-[3px]  inline-block my-auto mx-3 ">
                    </div>
                    <div class="rounded-full w-4 h-4 flex justify-center bg-[#687AFD]"
                        :class="[{ 'bg-[#C7C8D2]': step < 2 }, { 'bg-gr': step > 2 }]">
                        <v-icon name="bi-check" class="mb-1 text-white "
                            :class="[{ 'opacity-0': step <= 2 }, { 'opacity-1': step > 2 }]"></v-icon>
                    </div>
                    <div :class="[{ 'bg-[#8CDFB7]': step > 2 }, { 'bg-[#E3E3E8]': step <= 2 }]"
                        class="box transition-all rounded-xl w-32 h-[3px]  inline-block my-auto mx-3 ">
                    </div>

                    <div class="rounded-full w-4 h-4 flex justify-center   bg-[#687AFD]"
                        :class="[{ 'bg-[#C7C8D2]': step < 3 }, { 'bg-gr': step > 3 }]">
                        <v-icon name="bi-check" class="mb-1 text-white "
                            :class="[{ 'opacity-0': step <= 3 }, { 'opacity-1': step > 3 }]"></v-icon>
                    </div>
                    <div :class="[{ 'bg-[#8CDFB7]': step > 3 }, { 'bg-[#E3E3E8]': step <= 3 }]"
                        class="box transition-all rounded-xl w-32 h-[3px]  inline-block my-auto mx-3 ">
                    </div>
                    <div class="rounded-full w-4 h-4 flex justify-center  bg-[#687AFD]"
                        :class="[{ 'bg-[#C7C8D2]': step < 4 }, { 'bg-gr': step > 4 }]">
                        <v-icon name="bi-check" class="mb-1 text-white "
                            :class="[{ 'opacity-0': step <= 4 }, { 'opacity-1': step > 4 }]"></v-icon>
                    </div>
                </div>
                
                <div class="mt-4 inline-block font-semibold tracking-wider text-[#C7C8D2]">
                    <p class="inline " :class="[{ 'text-black': step >= 1 }]">Account type</p>
                    <p class="inline ml-16" :class="[{ 'text-black': step >= 2 }]">Personal details</p>
                    <p class="inline ml-10" :class="[{ 'text-black': step >= 3 }]">Additional info</p>
                    <p class="inline ml-12" :class="[{ 'text-black': step >= 4 }]">Confirmation</p>
                </div>
            </div>

            <div class="box-const">
                <div class="mt-28 pr-48 bloc" :class="[{ 'steps ': step > 1 }, { 'hidden': step != 1 }]">
                    <h1 class="text-6xl">Sign up</h1>
                    <p class="text-[#6f6f72] mt-4">Register to create your restaurant or personal account</p>
                    <div @click="type(true)" :class="[{ 'border-[#4E60FF] bg-[#F3F4FF]': typeName }]"
                        class="transition-all mt-5 w-96 border-2  py-3 px-5 rounded-2xl flex cursor-pointer">
                        <div class="inline-block mt-1 transition-all">
                            <div class="bg-[#EDEEF2] inline-block p-3 rounded-xl" :class="[{ 'bg-bl ': typeName }]">
                                <v-icon name="oi-person" :class="[{ 'text-[#fff]': typeName }]" class="text-[#A1A2B4]"
                                    scale="1.3" />
                            </div>
                        </div>
                        <div class="flex flex-col my-auto ml-5">
                            <h5 class="p-0 block">Personal</h5>
                            <p class="p-0 block">Keep your order in one place</p>
                        </div>
                    </div>
                    <div @click="type(false)" :class="[{ 'border-[#4E60FF] bg-[#F3F4FF]': !typeName }]"
                        class="transition-all cursor-pointer mt-5 w-96 border-2 py-3 px-5 rounded-2xl flex">
                        <div class="inline-block mt-1 transition-all">
                            <div :class="[{ 'bg-bl': !typeName }]"
                                class="inline-block transition-all bg-[#EDEEF2] p-3 rounded-xl">
                                <v-icon name="ri-shopping-bag-3-line" :class="[{ 'text-[#fff]': !typeName }]" class="text-[#A1A2B4]"
                                    scale="1.3" />
                            </div>
                        </div>
                        <div class="flex flex-col my-auto ml-5">
                            <h5 class="p-0 block">Restaurant</h5>
                            <p class="p-0 block">Manage your own restaurant</p>
                        </div>
                    </div>
                    <button @click="onSubmitHendler(1)" type="submit"
                        class="hover:text-[#4E60FF] w-96 bg-[#4E60FF] mt-10 text-white py-3 rounded-lg hover:bg-white border transition-colors border-[#4E60FF]">Continue</button>

                </div>

                <div class="mt-28  bloc" :class="[{ 'steps hidden': step > 2 }, { 'hidden': step != 2 }]">
                    <div class="inline-block pr-32">
                        <h1 class="text-6xl">Personal details</h1>
                        <p class="text-[#6f6f72] mt-4">Enter your that you will use for entering</p>
                        <form @submit.prevent class="mt-7 pr-60">
                            <label>Full Name</label>
                            <Input type="text" placeholder="full name" :value="fullName"
                                @input="fullName = $event.target.value" />
                            <label>Email</label>
                            <Input type="email" placeholder="name@exmple.com" :value="email"
                                @input="email = $event.target.value" />
                            <label>Password</label>
                            <Input type="password" placeholder="min.8 characters" :value="password"
                                @input="password = $event.target.value" />

                            <button @click="onSubmit(2)" type="submit"
                                class="hover:text-[#4E60FF] w-full bg-[#4E60FF] mt-6 text-white py-3 rounded-lg hover:bg-white border transition-colors border-[#4E60FF]">Continue</button>
                            <p class="text-[#A1A2B4] mt-4 cursor-pointer  text-center" @click="back(2)">Back</p>
                        </form>
                    </div>
                </div>
                <div class="mt-28  bloc" :class="[{ 'steps hidden': step > 3 }, { 'hidden': step != 3 }]">
                    <div class="pr-32">
                        <h1 class="text-6xl">Additional info</h1>
                        <p class="text-[#6f6f72] mt-4">Enter your additional information (*is't recommend)</p>
                        <form @submit.prevent class="mt-7 pr-60">
                            <label>Phone number</label>
                            <Input type="" placeholder="(99) 999 - 99 - 99" :value="phone"
                                @input="phone = $event.target.value" />
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded-xl focus:ring-blue-500 checked:bg-blue-500">
                                <label class="ml-4 mt-1 text-sm font-medium text-[#2B2B43] ">Turn on 2
                                    authentification</label>
                            </div>
                            <button @click="onSubmitPhone(3)" type="submit"
                                class="hover:text-[#4E60FF] w-full bg-bl mt-6 text-white py-3 rounded-lg hover:bg-white border transition-colors border-[#4E60FF]">Continue</button>
                            <p class="text-[#A1A2B4] mt-4 cursor-pointer  text-center" @click="back(3)">Back</p>
                        </form>
                    </div>
                </div>
                <div class="mt-28 pr-48 bloc" :class="[{ 'steps hidden': step > 4 }, { 'hidden': step != 4 }]">
                    <div class="success-checkmark">
                        <div class="check-icon">
                            <span class="icon-line line-tip"></span>
                            <span class="icon-line line-long"></span>
                            <div class="icon-circle"></div>
                            <div class="icon-fix"></div>
                        </div>
                    </div>

                    <h1 @click="onSubmitHendler(4)">asdass</h1>
                </div>

                <p class="text-[#A1A2B4] mt-8 ">Already have any account ? <RouterLink :to="{ name: 'login' }"
                        class="text-[#4E60FF]   cursor-pointer inline">Login</RouterLink>
                </p>
            </div>
        </div>
    </div>
</template>
<script>
import { mapState } from "vuex"
import { signUp, signImg } from '../constants/'


export default {
    data() {
        return {
            step: 1,
            signUp,
            signImg,
            
            typeName: true,
            fullName: "",
            email: "",
            phone: "",
            password: "",




        }
    },
    computed: {
        ...mapState({
            isLoading: state => state.auth.isLoading,
            error: state => state.auth.error
        }),
    },
    methods: {
        onSubmit(number) {
            number++;
            const data = {
                fullName: this.fullName,
                email: this.email,
                password: this.password,
                type: this.typeName,
            }
            this.$store.dispatch('register', data)
                .then(user => {
                    this.step = number
                    console.log('user', user)

                    console.log(this.step)
                    // this.$router.push({ name: 'home' })
                })
                .catch(err => console.log('error', err))
        },
        onSubmitPhone(number){
            number++;
            const phone = {
                phone: this.phone,
                token: localStorage.getItem('token'),
            }
            this.$store.dispatch('phone', phone)
                .then(phone => {
                    console.log('phone', phone)
                    console.log(this.step)
                    this.step = number
                    // this.$router.push({ name: 'home' })
                })
        },
        type(type) {
            this.typeName = type;
            console.log(this.typeName)
        },
        onSubmitHendler(number) {
            number++;
            this.step = number
            console.log(this.step)
        },

        back(number) {
            number--;
            this.step = number
            console.log(this.step)
        },
    },
}
</script>

<style scoped>
/**
 * Extracted from: SweetAlert
 * Modified by: Istiak Tridip
 */
.success-checkmark {
    width: 80px;
    height: 115px;
    margin: 0 auto;

    .check-icon {
        width: 80px;
        height: 80px;
        position: relative;
        border-radius: 50%;
        box-sizing: content-box;
        border: 4px solid #4CAF50;

        &::before {
            top: 3px;
            left: -2px;
            width: 30px;
            transform-origin: 100% 50%;
            border-radius: 100px 0 0 100px;
        }

        &::after {
            top: 0;
            left: 30px;
            width: 60px;
            transform-origin: 0 50%;
            border-radius: 0 100px 100px 0;
            animation: rotate-circle 4.25s ease-in;
        }

        &::before,
        &::after {
            content: '';
            height: 100px;
            position: absolute;
            background: #FFFFFF;
            transform: rotate(-45deg);
        }

        .icon-line {
            height: 5px;
            background-color: #4CAF50;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 10;

            &.line-tip {
                top: 46px;
                left: 14px;
                width: 25px;
                transform: rotate(45deg);
                animation: icon-line-tip 0.75s;
            }

            &.line-long {
                top: 38px;
                right: 8px;
                width: 47px;
                transform: rotate(-45deg);
                animation: icon-line-long 0.75s;
            }
        }

        .icon-circle {
            top: -4px;
            left: -4px;
            z-index: 10;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            position: absolute;
            box-sizing: content-box;
            border: 4px solid rgba(76, 175, 80, .5);
        }

        .icon-fix {
            top: 8px;
            width: 5px;
            left: 26px;
            z-index: 1;
            height: 85px;
            position: absolute;
            transform: rotate(-45deg);
            background-color: #FFFFFF;
        }
    }
}

@keyframes rotate-circle {
    0% {
        transform: rotate(-45deg);
    }

    5% {
        transform: rotate(-45deg);
    }

    12% {
        transform: rotate(-405deg);
    }

    100% {
        transform: rotate(-405deg);
    }
}

@keyframes icon-line-tip {
    0% {
        width: 0;
        left: 1px;
        top: 19px;
    }

    54% {
        width: 0;
        left: 1px;
        top: 19px;
    }

    70% {
        width: 50px;
        left: -8px;
        top: 37px;
    }

    84% {
        width: 17px;
        left: 21px;
        top: 48px;
    }

    100% {
        width: 25px;
        left: 14px;
        top: 45px;
    }
}

@keyframes icon-line-long {
    0% {
        width: 0;
        right: 46px;
        top: 54px;
    }

    65% {
        width: 0;
        right: 46px;
        top: 54px;
    }

    84% {
        width: 55px;
        right: 0px;
        top: 35px;
    }

    100% {
        width: 47px;
        right: 8px;
        top: 38px;
    }
}</style>
