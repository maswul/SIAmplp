<template>
    <div class="cariAset">
        <form>
        <div class="form-group"><label for="cari">Ketik Untuk Meminjam Aset Kantor:</label>
            <input class="form-control" type="text" v-model="cari" @input="onChange" id="cari">

            <ul class="autocomplete-results" v-show="isOpen" >
                <li
                    v-for="(result, i) in hasil"
                    :key="i"
                    @click="setResult(result)"
                    class="autocomplete-result"
                >
                    {{ result }}
                </li>
            </ul>
        </div>
            <div class="form-row">
                <div class="col-md-6"><label for="hire-date">Rencana Pengembalian</label>
                    <input class="form-control autocomplete" id="hire-date" type="date">
                </div>

                <div class="col-md-6 button"><button class="btn btn-primary btn-block" type="submit">Kirim</button></div>
            </div>
        </form>
    </div>
</template>

<style>
.autocomplete {
    position: relative;
    width: 130px;
}

.autocomplete-results {
    padding: 0;
    margin: 0;
    border: 1px solid #eeeeee;
    height: 120px;
    overflow: auto;
}

.autocomplete-result {
    list-style: none;
    text-align: left;
    padding: 4px 2px;
    cursor: pointer;
}

.autocomplete-result:hover {
    background-color: #4AAE9B;
    color: white;
}
</style>

<script>
    export default {
        mounted() {
            console.log('Component CariAset mounted.')
        },
        name: 'cariAset',
        data () {
            return {
                cari: '',
                hasil: [],
                isOpen: false,
            }
        },
        methods: {
            onChange () {
                this.$emit('input', this.cari);
                this.isOpen = true;
                this.filterHasil();

            },
            filterHasil() {
                this.hasil = this.items.filter(item => item.toLowerCase().indexOf(this.cari.toLowerCase()) > -1);
            },
            setResult(result) {
                this.cari = result;
                this.isOpen = false;
            },


        },
        props: {
            items: {
                type: Array,
                required: false,
                default: () => []
            }
        }
    };
</script>
