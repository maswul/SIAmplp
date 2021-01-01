<template>
    <div class="card card-warning card-outline">
        <div class="card-header">
            <h1 class="card-title">Master Data Pegawai</h1>
            <div class="card-tools">
                <a name="" id="" class="btn btn-primary" href="#" role="button" data-toggle="dropdown">Tambah Data</a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-edit mr-2"></i> Tambah Manual
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file-excel mr-2"></i> Import Excel
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Content</p>
        </div>
        <div class="card-footer">
            Footer
        </div>
    </div>
</template>
<script>
export default {
    mounted() {
        console.log('Component Pegawai mounted.')
    }
}
</script>
