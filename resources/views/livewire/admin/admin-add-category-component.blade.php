<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Yeni Kategori Ekle
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">Tüm Kategoriler</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('messgae'))
                            <div class="alert alert-success" role="alert">{{Session:get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="storeCategory">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Kategori İsmi</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Kategori İsmi" class="form-control input-md" wire:model="name" wire:keyup="generateslug"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Kategori Bilgisi</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Kategori Bilgisi" class="form-control input-md" wire:model="slug"/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Onayla</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
