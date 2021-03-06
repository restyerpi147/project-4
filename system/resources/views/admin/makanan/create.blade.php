@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman Makanan Restaurant 24</h3>

            <div class="card">
            	<div class="card-header">
            		<strong>Tambah Makanan</strong>
            	</div>
            	<div class="card-body">
            		<form action="{{url('admin/makanan')}}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="nama">Nama Makanan</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                      </div>
                      <div class="form-group">
                        <label for="nama">Harga Makanan</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                      </div>
                      <div class="form-group">
                        <label for="kategori">Kategori Makanan</label>
                        <select class="form-control" id="kategori" name="kategori">
                          <option selected="" disabled="">-- Pilih Kategori --</option>
                          <option value="Makanan Pembuka">Makanan Pembuka</option>
                          <option value="Makanan Ringan">Makanan Ringan</option>
                          <option value="Makanan Berat">Makanan Berat</option>
                          <option value="Makanan Penutup">Makanan Penutup</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="nama">Deskripsi Makanan</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            	</div>
            </div>
          </div>
        </div>




@endsection