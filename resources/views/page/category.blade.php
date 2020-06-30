<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
    <div class="shop__sidebar">
        <aside class="wedget__categories poroduct--cat">
            <h3 class="wedget__title">Chủ đề</h3>
            <ul>
                @foreach($chude as $cd)
                <li>
                    <a href="{{ route('page.list.chude',['id' => $cd->cd_id]) }}">{{ $cd->cd_name }} 
                        <span>( {{ $cd->sach->count()  }} )</span>
                    </a>
                </li>
                @endforeach
                
            </ul>
        </aside>
        
    </div>
</div>