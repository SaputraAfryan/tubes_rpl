@include('layouts.main')

@section('container')
    <div class="container-category fluid" style="padding:20px;background-color: #afeeee">
        <div class="container-category-header">
            <table style="width: 100%">
                <tr>
                    <td align="left">
                        <div style="color: #330066">
                            <h2>Kategori</h2>
                        </div>
                    </td>
                    <td align="right"><a href="/" type="link">See More</a></td>
                </tr>
            </table>
        </div>
        <div class="d-flex justify-content-center" style="padding: 20px;background-color:#afeeee">
            <ul class="list-inline-block">
                <li class="list-inline-item" style="width: 150px;height:150px; background-color: bisque">Lorem, ipsum.</li>
                <li class="list-inline-item" style="width: 150px;height:150px; background-color: bisque">Phasellus iaculis</li>
                <li class="list-inline-item" style="width: 150px;height:150px; background-color: bisque">Nulla volutpat</li>
            </ul>   
        </div>
    </div>
@show