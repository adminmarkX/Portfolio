public class pickuptruck extends Vehicle implements tax{
    private int pay;
    public pickuptruck (int cc,String model,int year){
        super(cc,model,year);
    }


    @Override
    public int calculate () {
        if (getCc() < 1500) {
            this.pay = 300;
        } else if (getCc() >= 1500 && getCc() < 2500) {
            this.pay = 400;
        } else {
            this.pay = 450;
        }
        int _5_year_penalty = getYear()/5; // epeidei krinomei to vehicle pernoume ta years kai kanoume tin praksi 
        for (int i=0;i<_5_year_penalty;i++){
            this.pay = this.pay + ((this.pay*20)/100);
        }
        return this.pay;
    }

}
