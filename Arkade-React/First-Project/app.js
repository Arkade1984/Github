const title = React.createElement(
    'h1',
    { id: 'main-title', title: 'this is a title' },
    'My First React Element!'
);

const desc = React.createElement(
    'p',
    null,
    'I just learned how to create a React node and render it to the Dom.'
);

const header =  React.createElement(
    'header',
    null,
    title,
    desc
);

ReactDOM.render(
    header,
    document.getElementById('root')
);