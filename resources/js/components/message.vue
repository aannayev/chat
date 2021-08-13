<template>

<div>

    <li class="list-group-item whilescroll" :class="className"><slot></slot>
    <span id="time">{{time}}</span></li>

    <small class="badge float-right" :class='badgeClass'>{{user}}</small>

</div>


</template>

<script>
    export default {
        props:[
          'color',
            'user',
            'time'
        ],
        computed:{
            className(){
                return 'list-group-item-'+this.color;
            },

            badgeClass(){
                return 'list-group-item-'+this.color;
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
    #time{
        font-size: 12px;
        margin-top:10px;
        font-weight: bold;
        color:black;
        float: right;
    }
</style>
