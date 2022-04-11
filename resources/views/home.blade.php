@include('layouts.main')

@section('container')
    <div class="container-category fluid" style="padding:20px;background-color: #EED7CE">
        <div class="container-category-header">
            <table style="width: 100%">
                <tr>
                    <td align="left">
                        <div style="color: #F7F7F7">
                            <h2>Kategori</h2>
                        </div>
                    </td>
                    <td align="right"><a href="/" type="link">See More</a></td>
                </tr>
            </table>
        </div>
        <div class="container-category-content" style="padding: 20px;background-color:#EED7CE">
            <table style="width:50%">
                <tr>
                    <td align="right">
                        row 1 col 1
                    </td>
                    <td align="left">
                        row 1 col 2
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        row 2 col 1
                    </td>
                    <td align="left">
                        row 2 col 2
                    </td>
                </tr>
            </table>
        </div>
    </div>
@show