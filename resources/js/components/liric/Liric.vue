<template>
    <div>
        <a :href="liricCreate" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i></a>
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
                <tr v-for="(liric, index) in lirics" :key="index">
                    <th scope="row">{{ index + 1 }}</th>
                    <td>{{ liric.title }}</td>
                    <td v-html="liric.body"></td>
                    <td>{{ liric.album.name }}</td>
                    <td>{{ liric.slug }}</td>
                    <td>
                        <a :href="/lirics/+ liric.slug + '/edit'" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <Delete :route="/lirics/+liric.slug"></Delete>
                    </td>
                </tr>    
            </tbody>
        </table> 
    </div>
</template>

<script>
import Delete from '../Delete';

export default {
    props: ['lirics', 'liric-create'],
    components:{
        Delete
    },
    mounted() {
        console.log('ol')
    },
}
</script>
