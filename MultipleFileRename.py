
import os


def fileRename(SMILE):

    
    count = 0
    
    for files in os.listdir("downloads"):

        
        file_extension = os.path.splitext(files)[1]
        
        newName = "user-input_name ("+str(count)+")"+file_extension

       
        source = "SOURCE ADDRESS (FOLDER PATH WHICH CONTAINS THE FILES)"+files
        
        destination = "DESTINATION FOLDER ADDRESS"+newName

        
        os.rename(source, destination)

        
        count += 1

    print("\nALL THE FILES HAVE BEEN RENAMED SUCCESSFULLY")


if __name__ == '__main__':
    fileRename()
