<link rel="stylesheet" href="/static/plugins/highlight/styles/an-old-hope.css" />
<div class="container mt-80">
    <form>
        <div class="form-row align-items-center">
            <div class="col-sm-3 my-1">
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-sm-3 my-1">
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="Jane Doe">
            </div>
            <div class="col-auto my-1">
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
<div class="container">
    <div class="row">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">语言/框架</th>
                    <th scope="col">描述</th>
                    <th scope="col" width="500px">代码</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Java</td>
                    <td>Hello Word</td>
                    <td>
                        <pre><code>public class HelloWorld {
                                    public static void main(String[] args) {
                                            System.out.println("我的第一个Java程序：Hello World。");
                                    }
                                }
                            </code>
                        </pre>
                    </td>
                </tr>
                <tr>
                    <td>CSS3</td>
                    <td>背景色变</td>
                    <td>
                            <pre>
                        <code>
                        11
                        </code>
                    </pre>
                    </td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>定义数组</td>
                    <td>
                    <pre><code>
function cool(x) {
  return x + 1;
}
</code></pre>
                    </td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>定义数组</td>
                    <td>
                            <pre>
                        <code>
                        {
                            background:red
                        }
                        </code>
                    </pre>
                    </td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>定义数组</td>
                    <td>
                            <pre>
                        <code>
                        {
                            background:red
                        }
                        </code>
                    </pre>
                    </td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>定义数组</td>
                    <td>
                            <pre>
                        <code>
                        {
                            background:red
                        }
                        </code>
                    </pre>
                    </td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>定义数组</td>
                    <td>
                            <pre>
                        <code>
                        {
                            background:red
                        }
                        </code>
                    </pre>
                    </td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>定义数组</td>
                    <td>
                            <pre>
                        <code>
                        {
                            background:red
                        }
                        </code>
                    </pre>
                    </td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>定义数组</td>
                    <td>
                            <pre>
                        <code>
                        {
                            background:red
                        }
                        </code>
                    </pre>
                    </td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>定义数组</td>
                    <td>
                            <pre>
                        <code>
                        {
                            background:red
                        }
                        </code>
                    </pre>
                    </td>
                </tr>
            </tbody>
        </table>
        <nav aria-label="Page navigation example" class="m-center">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>

<script src="/static/plugins/highlight/highlight.pack.js"></script>
<script>
window.onload = function(){
    console.log($);
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightBlock(block);
    });
}
</script>