import java.io.*;
import java.util.Scanner;
import java.util.ArrayList;


public class tryVehicle {
    public static void main(String[] args)  {
        ArrayList<Vehicle> vec = new ArrayList<Vehicle>();

        int i=0;
        while(true){

            System.out.println("0:Exit"+"\n"+"1:Create new Vehicle"+"\n"+"2:Delete existing Vehicle"+"\n"+"3:Search existing Vehicle and Prints it's info"+"\n"+"4:Print all Vehicles"+"\n"+"5:Upload values from file"+"\n"+"6:Donwload values to a file"+"\n"+"7:Donwload values with ObjectOutput"+"\n"+"8:Upload values with ObjectInput");
            Scanner keyboard = new Scanner(System.in);
            Scanner keyboard1 = new Scanner(System.in);
            int anw = keyboard.nextInt();
            if(anw == 0) // an se periptosi pou o xristis thelei na bgei
            {
                break;
            }
            else if(anw == 1)
            {
                System.out.println("What type of vehicle you want to create?"+"\n"+"1:Car"+"\n"+"2:Motorbike"+"\n"+"3:Pickuptruck");
                int type = keyboard.nextInt();
                if(type == 1) // gia na ftiaksei ena car
                {
                    System.out.println("Please give an model");
                    String model = keyboard1.nextLine();
                    System.out.println("Please give an cc");
                    int cc = keyboard.nextInt();
                    System.out.println("Please give an year");
                    int year = keyboard.nextInt();
                    vec.add(new car(cc,model,year));
                    System.out.println("Register is Done"+" "+vec.get(i).getCc()+" "+vec.get(i).getModel()+" "+vec.get(i).getYear());
                    i++;
                }
                else if(type == 2){ // na ftiaksei ena motorbike
                    System.out.println("Please give an model");
                    String model = keyboard1.nextLine();
                    System.out.println("Please give an cc");
                    int cc = keyboard.nextInt();
                    System.out.println("Please give an year");
                    int year = keyboard.nextInt();
                    vec.add(new motorbike(cc,model,year));
                    System.out.println("Register is Done"+" "+vec.get(i).getCc()+" "+vec.get(i).getModel()+" "+vec.get(i).getYear());
                    i++;
                }
                else // na ftiaksei pickputtruck
                {
                    System.out.println("Please give an model");
                    String model = keyboard1.nextLine();
                    System.out.println("Please give an cc");
                    int cc = keyboard.nextInt();
                    System.out.println("Please give an year");
                    int year = keyboard.nextInt();
                    vec.add(new pickuptruck(cc,model,year));
                    System.out.println("Register is Done"+" "+vec.get(i).getCc()+" "+vec.get(i).getModel()+" "+vec.get(i).getYear());
                    i++;
                }
            }else if(anw == 2){
                System.out.println("Which vehicle number you want to delete?");
                int num = keyboard.nextInt();
                vec.remove(num);
                System.out.println("Deleted Succesfully!");
            }
            else if(anw == 3){
                System.out.println("Please enter the model of the car");
                String src = keyboard1.nextLine();
                for(int j=0;j<vec.size();j++) {
                    if (vec.get(j).getModel() == src) {
                        System.out.println("Found !"+"\n"+"The cc are : "+vec.get(j).getCc()+" and the year is "+vec.get(j).getYear());
                    }
                }
            }
            else if(anw == 4){
                System.out.println("RESULTS::"+"\n");
                for(i=0;i<vec.size();i++){
                    System.out.println("Vehicle "+i+" "+" cc is "+vec.get(i).getCc()+" the model is "+vec.get(i).getModel()+" the year is "+vec.get(i).getYear()+"\n");
                }

            }
            else if(anw == 6){
                try{
                BufferedWriter bw = new BufferedWriter(
                        new FileWriter("C:\\Users\\ConstaX\\IdeaProjects\\vehcile_payments\\download\\output.txt"));
                        int size = vec.size();
                        for(int j=0;j<size;j++){
                            bw.write(vec.get(j).getModel()+"\n");
                            bw.write(vec.get(j).getCc()+"\n");
                            bw.write(vec.get(j).getYear()+"\n");

                        }
                        bw.close();
                    System.out.println("Succesfuly Downloaded!");
                }
                catch(Exception e){
                    System.out.println("Something is wrong with the File!");
                }
            }
            else if(anw == 5){
                try {
                    BufferedReader br = new BufferedReader(new FileReader("C:\\Users\\ConstaX\\IdeaProjects\\vehcile_payments\\upload\\input.txt"));
                    String s = null;
                    try {
                        s = br.readLine();
                    } catch (IOException e) {
                        System.out.println("The file is empty!");
                    }
                    while (s != null) { // an se periptosi pou h proti grammi einai car tote diabazei grami gramii ta dedomena kai ta bazei sto vec arraylist
                        if (s == "car") {
                            String model = br.readLine();
                            int cc = Integer.parseInt(br.readLine());
                            int year = Integer.parseInt(br.readLine());
                            vec.add(new car(cc, model, year));
                        } else if (s == "motorbike") {
                            String model = br.readLine();
                            int cc = Integer.parseInt(br.readLine());
                            int year = Integer.parseInt(br.readLine());
                            vec.add(new motorbike(cc, model, year));
                        } else {

                            String model = br.readLine();
                            int cc = Integer.parseInt(br.readLine());
                            int year = Integer.parseInt(br.readLine());
                            vec.add(new pickuptruck(cc, model, year));
                        }
                        }
                        br.close();
                    }
                catch(Exception e){
                        System.out.println("Something is wrong with the File!");
                    }


                }
            else if(anw == 7){ // stin periptosi ton Objectoutput Streams den ksero ti allo ithele na kanoume to epsaksa sto internet alla den brika kati sto sigekrimeno problima me ta Object output kai input streams
                    for(int i1=0;i1< vec.size();i1++){
                        File obj = new File("C:\\Users\\ConstaX\\IdeaProjects\\vehcile_payments\\download\\output_obj.txt");
                        try {
                            ObjectOutputStream objsout = new ObjectOutputStream(new FileOutputStream(obj));
                            objsout.writeObject(vec.get(i1));
                            objsout.close();
                        } catch (IOException e) {
                            e.printStackTrace();
                        }
                    }
            }
            else{
                for(int i1=0;i1< vec.size();i1++){
                    File obji = new File("C:\\Users\\ConstaX\\IdeaProjects\\vehcile_payments\\upload\\intput_obj.txt");
                    try {

                         ObjectInputStream objsin = new ObjectInputStream((new FileInputStream(obji)));
                         String vehicle = objsin.readLine();
                         if (vehicle == "car"){
                             car car = null;
                             car = (car)objsin.readObject();
                             vec.add(car);
                         }
                         else if(vehicle == "motorbike"){
                             motorbike motorbike = null;
                             motorbike = (motorbike)objsin.readObject();
                             vec.add(motorbike);
                         }else {
                             pickuptruck pickuptruck = null;
                             pickuptruck = (pickuptruck)objsin.readObject();
                             vec.add(pickuptruck);
                         }
                    } catch (IOException | ClassNotFoundException e) {
                        e.printStackTrace();
                    }
                }
            }
            }
            System.out.println("Goodbye");
        }
}
