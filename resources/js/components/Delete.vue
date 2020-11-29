<template>
    <button ref="delete" v-on:click="deleteBand(id)" class="btn btn-danger btn-sm d-inline-block"><i class="fa fa-trash"></i></button>
</template>

<script>
export default {
    name: 'Delete',
    props: ['id'],
    methods: {
        deleteBand(id) {
            console.log(id)
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                        axios
                            .delete(`/bands/${id}`)
                            .then((response) => {
                                console.log(response.data)
                            });
                        this.$refs.delete.parentNode.parentNode.remove();
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            }
    },
}
</script>