# WORK IN PROGRESS
This library is a work in progress, it is not in use in any production system.

##
The idea behind this API client is that it defines a minimal skeleton code which then generates the remaining code 
from the Rancher API itself.
For now i've included all the generated class in the repository to make inspection / reasoning about the generated code easier.

## Retrieval & update
Object retrieval works, both directly from the client and from entities.
For example:
````
$project = $client->getAccounts()[0]->getProjects()[0];
$project->name .= 'x';
if ($project->save()) {
    echo "Project name is now:" . $project->name;
} else {
    echo "Failed to update project.";
    print_r($project->errors);
}
````