<template>
    <div>
        <a :href="routeCreate" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i></a>
        <table class="mb-0 table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Liric</th>
                    <th>Album</th>
                    <th>Band</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(liric, index) in lirics" :key="liric.title">
                    <th scope="row">{{ index + 1 }}</th>
                    <td>{{ liric.title }}</td>
                    <td v-html="liric.body"></td>
                    <td>{{ liric.album.name }}</td>
                    <td>{{ liric.band.name }}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <Delete :route="1"></Delete>
                    </td>
                </tr>    
            </tbody>
        </table> 
    </div>
</template>

<script>
import Delete from '../Delete';

export default {
    props: ['lirics', 'route-create'],
    components:{
        Delete
    },
    mounted() {
        console.log('Dela')
    },
}
</script>
