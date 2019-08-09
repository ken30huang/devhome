<div class="container mt-80">
    
</div>
<script src="https://unpkg.com/@plnkr/runtime"></script>
<script>
    const PlnkrRuntime = window.PlnkrRuntime;
    // Get weird
    // We define a mock 'host' filesystem that represents the project we will run
const files = {
    'package.json': JSON.stringify({
        dependencies: {
            react: '16.x',
            'react-dom': '16.x',
        },
    }),
    'index.js': `
        import React from 'react';
        import { renderToString } from 'react-dom/server';

        import Hello from './Hello';

        export const markup = renderToString(<Hello name="World"></Hello>);
    `,
    'Hello.js': `
        import React, { Component } from 'react';

        export default class Hello extends Component {
            render() {
                return <h1>Hello {this.props.name}</h1>;
            }
        }
    `,
};
// Next, we define a host that implements the RuntimeHost interface and resolves files from our mock filesystem
const host = {
    getCanonicalPath(path) {
        if (files[path]) return path;
        if (files[`${path}.js`]) return `${path}.js`;
        return Promise.reject(new Error(`File not found ${path}`));
    },
    getFileContents(canonicalPath) {
        return files[canonicalPath];
    }
};
// Now that we have a host, we can create a runtime instance
const runtime = new PlnkrRuntime.Runtime({ host });

// Now we run our example code that will pull in react and react-dom, will transpile our custom code and will
// then execute it in a context where bare modules are resolved for us.
const markup = runtime.import('./index.js');
console.log(markup);
markup.then(function (result) {
    console.log(result.markup);
});
</script>