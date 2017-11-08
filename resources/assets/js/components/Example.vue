<template>
    <div class="container">
        <!-- <button @click="showToast('Hi')">Show Toast</button> -->
        <toast-manager ref="toast"></toast-manager>
    </div>
</template>

<script>
    export default {
        name: 'example',
        methods: {
            showToast(message) {
                this.toast(message, {
                    className: this.$refs.toast.styles.NORMAL_STYLE.SUCCESS,
                    closable: false,
                    timeout: 2000
                })
            },
            toast(message, options) {
                this.$refs.toast.showToast(message, options)
            }
        },
        mounted() {
            console.log('Component mounted.')

            this.$refs.toast.init({
                max: 1,
                position: this.$refs.toast.POSITION.BOTTOM_RIGHT
            })
        }
    }
</script>
