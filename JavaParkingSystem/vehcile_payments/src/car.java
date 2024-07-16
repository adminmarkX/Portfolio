public class car extends Vehicle implements tax{
    private int pay;

    public car (int cc,String model,int year){
            super(cc,model,year);
    } // klironomei to vehicle kai o main contructor tis vehicle pernei ta values apo to car


    @Override
    public int calculate() { // upologizei ta tax tou car

            if (getCc() < 1000) {
                this.pay = 100;
            } else if (getCc() >= 1000 && getCc() < 1500) {
                this.pay = 200;
            } else if (getCc() >= 1500 && getCc() < 1800) {
                this.pay = 250;
            } else {
                this.pay = 300;
            }
            if( getCc() == 0) // se periptosi poy einai ilektriko
            {
                return this.pay/2;
                }
        return this.pay;
    }

}
