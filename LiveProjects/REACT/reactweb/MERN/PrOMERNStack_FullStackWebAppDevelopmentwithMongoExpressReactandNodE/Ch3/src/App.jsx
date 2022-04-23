
// Grab the dom node to modify
const contentNode = document.getElementById('contents');


class IssueFilter extends React.Component {

    render(){
        return (<div>This is a placeholder for the Issue Filter.</div>);
    }
}


class BorderWrap extends React.Component {
    render() {
        const borderedStyle = {border: "1px solid silver", padding: 6};
        return (
            <div>
                {this.props.children}
            </div>
        );
    }
}

class IssueRow extends React.Component {
    // super();
    render(){
        const borderStyle = {border: "1px solid silver", padding: 4};
        const issue = this.props.issue;
        return (
        <tr>
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

class IssueTable extends React.Component {

    render(){
        const borderedStyle = {border: "1px solid silver", padding: 6};

        const issueRows = this.props.issues.map( issue => <IssueRow key={issue.id} issue={issue} />);

        return (
            <table className="bordered-table">
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
                <tbody>
                    {/* Passing Data as Props */}
                    {/* <IssueRow issue_id={1}
                    issue_title="Error in console when clicking Add" />
                    <IssueRow issue_id={2}
                    issue_title="Missing bottom border on panel" /> */}

                    {/* Passing data as children */}
                    {/* <IssueRow issue_id={1}>Error in console when clicking Add</IssueRow>
                    <IssueRow issue_id={2}>Missing bottom <b>border</b> on panel</IssueRow> */}

                    {/* Passing data as an array   */}
                    {issueRows}
                </tbody>
            </table>
        );
    }
}

class IssueAdd extends React.Component {
    render () {
        return (<div>This is a placeholder for the Issue ADD Entry Form.</div>);
    }
}

// Create a JSX Class Component
class IssueList extends React.Component {
// The render() method is something that that the React framework calls when it 
// needs to display the component
    render(){
        return (
            <div>
                <h1>Issue Tracker</h1>
                <IssueFilter/>
                <hr/>
                <IssueTable issues={issues}/>
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