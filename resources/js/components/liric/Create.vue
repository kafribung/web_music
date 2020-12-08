<template>
    <form action="">
        <div class="position-relative form-group">
            <label for="title" class="">Judul</label>
            <input v-model="liric.title" id="title" placeholder="title" autofocus autocomplete="off" type="text" class="form-control">
            <small class="text-danger">{{ liric.title }}</small>
        </div>
        <div class="position-relative form-group">
            <label for="band" class="">Band</label>
            <select v-model="liric.band_id" id="band"  class="form-control">
                <option  v-for="(band, index) in bands" :key="index" :value="band.id" >{{ band.name }}</option>
            </select>
            <small class="text-danger">{{ liric.band_id }}</small>
        </div>
        <div class="position-relative form-group">
            <label for="album" class="">Album</label>
            <select v-model="liric.album_id" id="album"  class="form-control">
                <option  v-for="(album, index) in albums" :key="index" :value="album.id" >{{ album.name }}</option>
            </select>
            <small class="text-danger">{{ liric.album_id }}</small>
        </div>
        <div class="position-relative form-group">
            <label for="body" class="">Lirik</label>
            <ckeditor :editor="editor" v-model="liric.body" id="body" placeholder="title" class="form-control" ></ckeditor>
            <small class="text-danger">{{ liric.body }}</small>
        </div>
    </form>
</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
export default {
    data() {
        return {
            'editor' : ClassicEditor,
            liric : {
                'title'   : '',
                'band_id' : '',
                'album_id' : '',
                'body'    : '',
            }
        }
    },
    props: ['bands', 'albums'],
    created() {
        // console.log(this.liric.band_id)
    },
}
</script>