
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

const IssueRow = (props) => (
    <tr>
        <td>{props.issue.id}</td>
        <td>{props.issue.status}</td>
        <td>{props.issue.owner}</td>
        <td>{props.issue.created.toDateString()}</td>
        <td>{props.issue.effort}</td>
        <td>{props.issue.completionDate ? props.issue.completionDate.toDateString() : 'No deadline'}</td>
        <td>{props.issue.title}</td>
    </tr>
)


function IssueTable(props) {
    const borderedStyle = {border: "1px solid silver", padding: 6};
    const issueRows = props.issues.map( issue => <IssueRow key={issue.id} issue={issue} />);

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
                {issueRows}
            </tbody>
        </table>
    );
    
}

// class IssueAdd extends React.Component {
//     render () {
//         return (<div>This is a placeholder for the Issue ADD Entry Form.</div>);
//     }
// }

// Create a JSX Class Component
class IssueList extends React.Component {
    constructor(){
        // Initializing App state
        super();
        this.state = { issues: []};

        this.createIssue = this.createIssue.bind(this);
    }

    // Called immediately after a component is mounted. Setting state here will trigger re-rendering
    componentDidMount(){
        
    }

    loadData(){
        fetch('/api/issues').then(response =>
            response.json()
        ).then(data => {
            console.log("Total count of records:", data._metadata.total_count);
            data.records.forEach(issue => {
            issue.created = new Date(issue.created);
            if (issue.completionDate)
            issue.completionDate = new Date(issue.completionDate);
            });
            this.setState({ issues: data.records });
            }
        ).catch(err => {
            console.log(err);
        });
    }


    createIssue(newIssue) {
        fetch('/api/issues', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(newIssue),
            }).then(response => response.json()
            ).then(updatedIssue => {
            updatedIssue.created = new Date(updatedIssue.created);
            if (updatedIssue.completionDate)
            updatedIssue.completionDate = new Date(updatedIssue.completionDate);
            const newIssues = this.state.issues.concat(updatedIssue);
            this.setState({ issues: newIssues });
            }).catch(err => {
            alert("Error in sending data to server: " + err.message);
        });
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
                <IssueAdd createIssue={this.createIssue}/>
            </div>
        );
    }
}

class IssueAdd extends React.Component {
        constructor() {
            super();
            this.handleSubmit = this.handleSubmit.bind(this);
        }


        handleSubmit(e) {
            e.preventDefault();
            var form = document.forms.issueAdd;
            this.props.createIssue({
            owner: form.owner.value,
            title: form.title.value,
            status: 'New',
            created: new Date(),
            });
            // clear the form for the next input
            form.owner.value = ""; form.title.value = "";
        }

        render() {
            return (
                <div>
                    <form name="issueAdd" onSubmit={this.handleSubmit}>
                        <input type="text" name="owner" placeholder="Owner" />
                        <input type="text" name="title" placeholder="Title" />
                        <button>Add</button>
                    </form>
                </div>
            )
        }
   }

// const issues = [
//     {
//     id: 1, status: 'Open', owner: 'Ravan',
//     created: new Date('2016-08-15'), effort: 5, completionDate: undefined,
//     title: 'Error in console when clicking Add',
//     },
//     {
//     id: 2, status: 'Assigned', owner: 'Eddie',
//     created: new Date('2016-08-16'), effort: 14, 
//    completionDate: new Date('2016-08-30'),
//     title: 'Missing bottom border on panel',
//     },
// ];

// 
ReactDOM.render(<IssueList/>, contentNode);