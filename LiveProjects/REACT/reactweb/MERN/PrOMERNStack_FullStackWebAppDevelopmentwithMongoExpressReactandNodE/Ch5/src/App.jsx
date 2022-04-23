
// Grab the dom node to modify
const contentNode = document.getElementById('contents');


//  Issue Filture Component for a Pages
class IssueFilter extends React.Component {

    render(){
        return (<div>This is a placeholder for the Issue Filter.</div>);
    }
}

//  Borderder Wrapping  Component for a Pages
class BorderWrap extends React.Component {
    render() {
        // Border styling
        const borderedStyle = {border: "1px solid silver", padding: 6};
        return (
            <div>
                {/* Parent Passes its properties to any children */}
                {this.props.children}
            </div>
        );
    }
}

// 1 Row Component for Pages
class IssueRow extends React.Component {
    // super();
    render(){
        // Border Styling
        const borderStyle = {border: "1px solid silver", padding: 4};
        // Store the issue property value in a variable
        const issue = this.props.issue;
        return (
        <tr>
            {/* Display individual columns on one row */}
            <td>{issue.id}</td>
            <td>{issue.status}</td>
            <td>{issue.owner}</td>
            <td>{issue.created.toDateString()}</td>
            <td>{issue.effort}</td>
            <td>{issue.completionDate ? issue.completionDate.toDateString() : 'No deadline'}</td>
            <td>{issue.title}</td>
        </tr>
        );
    }
}

// Issue table component
class IssueTable extends React.Component {

    render(){
        // Border Styling
        const borderedStyle = {border: "1px solid silver", padding: 6};

        // Loop through each of the available List Rows and pass them to the issue row component and store the returned value in a variable
        // for display within the table row
        const issueRows = this.props.issues.map( issue => <IssueRow key={issue.id} issue={issue} />);

        return (
            // Main table Component
            <table className="bordered-table">
                {/* Head of the table component */}
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Status</th>
                        <th>Owner</th>
                        <th>Created </th>
                        <th>Effort</th>
                        <th>Completetion date</th>
                        <th>Title</th>
                    </tr>
                </thead>
                {/* Body of the table component */}
                <tbody>
                    {/* Display the Jsx from the rows variable above */}
                    {issueRows}
                </tbody>
            </table>
        );
    }
}


// Issue Add Component
class IssueAdd extends React.Component {
    render () {
        return (<div>This is a placeholder for the Issue ADD Entry Form.</div>);
    }
}

// Create a JSX Class Component
class IssueList extends React.Component {
    constructor(){
        // Initializing App state
        super();
        this.state = { issues: issues};

        setTimeout(this.createTestIssue.bind(this), 2000);
    }


    createIssue(newIssue) {
        const newIssues = this.state.issues.slice();
        newIssue.id = this.state.issues.length+1;
        newIssues.push(newIssue);
        this.setState({ issues: newIssues});
    }
    
    createTestIssue() {
        this.createIssue({
            status: 'New', owner: 'Sthe',created: new Date(),
            title: 'Dynamic test issue created',
        });
    }

// The render() method is something that that the React framework calls when it 
// needs to display the component
    render(){
        return (
            <div>
                <h1>Issue Tracker</h1>
                <IssueFilter/>
                <hr/>
                <IssueTable issues={this.state.issues}/>
                <hr/>
                <IssueAdd/>
            </div>
        );
    }
}



const issues = [
    {
    id: 1, status: 'Open', owner: 'Ravan',
    created: new Date('2016-08-15'), effort: 5, completionDate: undefined,
    title: 'Error in console when clicking Add',
    },
    {
    id: 2, status: 'Assigned', owner: 'Eddie',
    created: new Date('2016-08-16'), effort: 14, 
   completionDate: new Date('2016-08-30'),
    title: 'Missing bottom border on panel',
    },
];

// 
ReactDOM.render(<IssueList/>, contentNode);