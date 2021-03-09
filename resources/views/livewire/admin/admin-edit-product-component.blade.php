<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Ürün Düzenle
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">Tüm Ürünler</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" enctype="multipoart/form-data" wire:submit.prevent="updateProduct">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Ürün İsmi</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Ürün İsmi" class="form-control input-md" wire:model="name" wire:keyup="generateSlug" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Ürün Bilgisi</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Ürün Bilgisi" class="form-control input-md" wire:model="slug" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Kısa Açıklama</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Kısa Açıklama" wire:model="short_description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Açıklama</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Açıklama" wire:model="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Ürün Fiyatı</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Ürün Fiyatı" class="form-control input-md" wire:model="sale_price" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Stok</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="stock_status">
                                        <option value="instock">Stokta Var</option>
                                        <option value="outofstock">Stokta Yok</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Özellik</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="featured">
                                        <option value="0">Hayır</option>
                                        <option value="1">Evet</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Adet</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Adet" class="form-control input-md" wire:model="quantity" />
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label">Ürün Resmi</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image"/>
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120" />
                                    @else
                                        <img src="{{asset('assets/images/products')}}/{{$image}}" width="120" />
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Kategori</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id">
                                        <option value="">Kategoriyi Seç</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Düzenle</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
